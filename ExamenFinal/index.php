<?include_once 'assets/inc/_header.php'; ?>
<?require_once 'assets/inc/_config.php'; ?>
  <?php
  
  // Basede datos
  $query = "SELECT e.*, c.name as category_name
            FROM events e
            LEFT JOIN categories c ON e.category_id = c.id
            WHERE 1";
  $params = [];
  $types = ""; // String for parameter types (i=integer, s=string, d=double, b=blob)


  // Add search condition if search query is provided
  if (!empty($search_query)) {
      $query .= " AND (e.title LIKE ? OR e.description LIKE ?)";
      $search_param = "%" . $search_query . "%";
      $params[] = $search_param; // Add param for title
      $params[] = $search_param; // Add param for description
      $types .= "ss"; // Two string parameters
  }


  // Add category filter if selected
  if ($category_filter > 0) {
      $query .= " AND e.category_id = ?";
      $params[] = $category_filter; // Add category ID param
      $types .= "i"; // One integer parameter
  }


  // Add order by date
  $query .= " ORDER BY e.event_date";


  // Prepare and execute query for events using mysqli prepared statements
  $events = [];
  $stmt = mysqli_prepare($conn, $query);


  if ($stmt) {
      // Bind parameters if any exist
      if (!empty($params)) {
          // Use the splat operator (...) to pass array elements as individual arguments
          if (!mysqli_stmt_bind_param($stmt, $types, ...$params)) {
              echo "Error binding parameters: " . mysqli_stmt_error($stmt);
              die();
          }
      }


      // Execute the statement
      if (mysqli_stmt_execute($stmt)) {
          // Get the result set
          $result_events = mysqli_stmt_get_result($stmt);
          if ($result_events) {
              // Fetch all results
              $events = mysqli_fetch_all($result_events, MYSQLI_ASSOC);
              // Result object is implicitly freed when statement is closed
          } else {
              echo "Error getting result set: " . mysqli_stmt_error($stmt);
          }
      } else {
          echo "Error executing statement: " . mysqli_stmt_error($stmt);
      }


      // Close the statement
      mysqli_stmt_close($stmt);
  } else {
      echo "Error preparing statement: " . mysqli_error($conn);
      die(); // Critical error if statement can't be prepared
  }
  ?>


  <div class="container mx-auto px-4 py-8">
      <header class="mb-8">
          <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Los Mejores Eventos de Gijón</h1>


          <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 mb-6">
              <form action="" method="GET" class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                  <input type="hidden" name="view" value="<?php echo htmlspecialchars($view_mode); ?>">
                  <div class="flex-grow">
                      <input type="text" name="search" placeholder="Busca el evento..."
                             value="<?php echo htmlspecialchars($search_query); ?>"
                             class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-base">
                  </div>
                  <div class="w-full md:w-auto">
                      <select name="category" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-base">
                          <option value="0">Categorías</option>
                          <?php foreach ($categories as $category): ?>
                              <option value="<?php echo $category['id']; ?>" <?php echo $category_filter == $category['id'] ? 'selected' : ''; ?>>
                                  <?php echo htmlspecialchars($category['name']); ?>
                              </option>
                          <?php endforeach; ?>
                      </select>
                  </div>
                  <div>
                      <button type="submit" class="w-full md:w-auto px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                          Buscar
                      </button>
                  </div>
              </form>


              <div class="flex space-x-2">
                  
                  <a href="?view=list<?php echo $link_extra_params; ?>"
                     class="px-4 py-2 rounded-lg <?php echo $view_mode == 'list' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?>">
                      Lista
                  </a>
                  <a href="?view=grid<?php echo $link_extra_params; ?>"
                     class="px-4 py-2 rounded-lg <?php echo $view_mode == 'grid' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?>">
                      Rejilla
                  </a>
                  <a href="?view=table<?php echo $link_extra_params; ?>"
                     class="px-4 py-2 rounded-lg <?php echo $view_mode == 'table' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?>">
                      Tabla
                  </a>
                  <a href="?view=map<?php echo $link_extra_params; ?>"
                     class="px-4 py-2 rounded-lg <?php echo $view_mode == 'map' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?>">
                      Mapa
                  </a>
                  <a href="?view=calendar<?php echo $link_extra_params; ?>"
                     class="px-4 py-2 rounded-lg <?php echo $view_mode == 'calendar' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?>">
                      Calendario
                  </a>
              </div>
          </div>
      </header>


      <main>
          <?php if ($event_id > 0): ?>
              <?php
              // Fetch single event details using mysqli prepared statements
              $event = null; // Initialize event
              $sql_single = "SELECT e.*, c.name as category_name
                             FROM events e
                             LEFT JOIN categories c ON e.category_id = c.id
                             WHERE e.id = ?";
              $stmt_single = mysqli_prepare($conn, $sql_single);


              if ($stmt_single) {
                  // Bind the integer parameter
                  mysqli_stmt_bind_param($stmt_single, 'i', $event_id);


                  // Execute
                  if (mysqli_stmt_execute($stmt_single)) {
                      // Get result
                      $result_single = mysqli_stmt_get_result($stmt_single);
                      if ($result_single) {
                          // Fetch the single row
                          $event = mysqli_fetch_assoc($result_single);
                      } else {
                          echo "Error getting result for single event: " . mysqli_stmt_error($stmt_single);
                      }
                  } else {
                      echo "Error executing single event query: " . mysqli_stmt_error($stmt_single);
                  }
                  // Close statement
                  mysqli_stmt_close($stmt_single);
              } else {
                  echo "Error preparing single event statement: " . mysqli_error($conn);
              }


              if ($event): // Check if event was successfully fetched
              ?>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                      <div class="p-6">
                          <div class="flex justify-between items-start">
                              <div>
                                  <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2"><?php echo htmlspecialchars($event['title']); ?></h2>
                                  <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                                      <span class="inline-block bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full px-3 py-1 text-sm font-semibold mr-2">
                                          <?php echo htmlspecialchars($event['category_name'] ?? 'Uncategorized'); ?>
                                      </span>
                                      <span>
                                          <?php echo date('F j, Y - g:i A', strtotime($event['event_date'])); ?>
                                      </span>
                                  </p>
                              </div>
                              <a href="?view=<?php echo $view_mode; ?><?php echo $link_extra_params; ?>"
                                 class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300">
                                  Volver a Eventos
                              </a>
                          </div>


                          <?php if (!empty($event['image_url'])): ?>
                              <div class="mb-6">
                                  <img src="<?php echo htmlspecialchars($event['image_url']); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>" class="w-full h-64 object-cover rounded-lg">
                              </div>
                          <?php endif; ?>


                          <div class="mb-6">
                              <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Description</h3>
                              <p class="text-gray-700 dark:text-gray-300"><?php echo nl2br(htmlspecialchars($event['description'])); ?></p>
                          </div>


                          <div class="mb-6">
                              <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Location</h3>
                              <p class="text-gray-700 dark:text-gray-300 mb-4"><?php echo htmlspecialchars($event['location']); ?></p>


                              <?php if (!empty($event['latitude']) && !empty($event['longitude'])): ?>
                                  <div id="detailMap" class="h-64 rounded-lg"></div>
                                  <script>
                                      document.addEventListener('DOMContentLoaded', function() {
                                          // Ensure Leaflet is loaded before trying to use it
                                          if (typeof L !== 'undefined') {
                                              const map = L.map('detailMap').setView([<?php echo $event['latitude']; ?>, <?php echo $event['longitude']; ?>], 15);


                                              L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                              }).addTo(map);


                                              L.marker([<?php echo $event['latitude']; ?>, <?php echo $event['longitude']; ?>])
                                                  .addTo(map)
                                                  .bindPopup("<?php echo htmlspecialchars(addslashes($event['title'])); // Use addslashes for JS strings in popups ?>")
                                                  .openPopup();
                                          } else {
                                              console.error("Leaflet library not loaded.");
                                          }
                                      });
                                  </script>
                              <?php endif; ?>
                          </div>
                      </div>
                  </div>
              <?php else: ?>
                  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                      El Evento no fue encontrado.
                  </div>
              <?php endif; ?>


          <?php else:  ?>


              <?php if ($view_mode == 'list'): ?>
                  <div class="space-y-6">
                      <?php if (empty($events)): ?>
                          <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                              No se encontraron eventos con ese criterio.
                          </div>
                      <?php endif; ?>


                      <?php foreach ($events as $event): ?>
                          <div class="bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-md transition-shadow duration-300 overflow-hidden flex flex-col md:flex-row">
                              <?php if (!empty($event['image_url'])): ?>
                                  <div class="md:w-1/4 h-48 md:h-auto">
                                      <img src="<?php echo htmlspecialchars($event['image_url']); ?>"
                                           alt="<?php echo htmlspecialchars($event['title']); ?>"
                                           class="w-full h-full object-cover">
                                  </div>
                              <?php endif; ?>
                              <div class="p-6 flex-1">
                                  <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                      <a href="?view=<?php echo $view_mode; ?>&event_id=<?php echo $event['id']; ?><?php echo $link_extra_params; ?>"
                                         class="hover:text-indigo-600 dark:hover:text-indigo-400">
                                          <?php echo htmlspecialchars($event['title']); ?>
                                      </a>
                                  </h2>
                                  <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                                      <span class="inline-block bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full px-3 py-1 text-sm font-semibold mr-2">
                                          <?php echo htmlspecialchars($event['category_name'] ?? 'Uncategorized'); ?>
                                      </span>
                                      <span>
                                          <?php echo date('F j, Y - g:i A', strtotime($event['event_date'])); ?>
                                      </span>
                                  </p>
                                  <p class="text-gray-700 dark:text-gray-300 mb-4">
                                      <?php echo substr(htmlspecialchars($event['description']), 0, 150) . (strlen($event['description']) > 150 ? '...' : ''); ?>
                                  </p>
                                  <div class="flex justify-between items-center">
                                      <div class="text-gray-600 dark:text-gray-400">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1113.314-13.314 8 8 0 010 11.314z" />
                                          </svg>
                                          <?php echo htmlspecialchars($event['location']); ?>
                                      </div>
                                      <a href="?view=<?php echo $view_mode; ?>&event_id=<?php echo $event['id']; ?><?php echo $link_extra_params; ?>"
                                         class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300 font-medium">
                                          Ver Evento
                                      </a>
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; ?>
                  </div>


              <?php elseif ($view_mode == 'grid'): ?>
                  <?php if (empty($events)): ?>
                      <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                          No events found matching your criteria.
                      </div>
                  <?php else: ?>
                      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                          <?php foreach ($events as $event): ?>
                              <div class="bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition-shadow duration-300 overflow-hidden flex flex-col h-full">
                                  <?php if (!empty($event['image_url'])): ?>
                                      <div class="h-48 overflow-hidden">
                                          <img src="<?php echo htmlspecialchars($event['image_url']); ?>"
                                               alt="<?php echo htmlspecialchars($event['title']); ?>"
                                               class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                                      </div>
                                  <?php endif; ?>
                                  <div class="p-6 flex-1 flex flex-col">
                                      <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                          <a href="?view=<?php echo $view_mode; ?>&event_id=<?php echo $event['id']; ?><?php echo $link_extra_params; ?>"
                                             class="hover:text-indigo-600 dark:hover:text-indigo-400">
                                              <?php echo htmlspecialchars($event['title']); ?>
                                          </a>
                                      </h2>
                                      <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                                          <span class="inline-block bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full px-3 py-1 text-sm font-semibold mr-2">
                                              <?php echo htmlspecialchars($event['category_name'] ?? 'Uncategorized'); ?>
                                          </span>
                                          <span>
                                              <?php echo date('F j, Y', strtotime($event['event_date'])); ?>
                                          </span>
                                      </p>
                                      <p class="text-gray-700 dark:text-gray-300 mb-4 flex-1">
                                          <?php echo substr(htmlspecialchars($event['description']), 0, 100) . (strlen($event['description']) > 100 ? '...' : ''); ?>
                                      </p>
                                      <div class="flex justify-between items-center mt-auto">
                                          <div class="text-gray-600 dark:text-gray-400 text-sm truncate mr-2">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1113.314-13.314 8 8 0 010 11.314z" />
                                              </svg>
                                              <?php echo htmlspecialchars($event['location']); ?>
                                          </div>
                                          <a href="?view=<?php echo $view_mode; ?>&event_id=<?php echo $event['id']; ?><?php echo $link_extra_params; ?>"
                                             class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300 font-medium">
                                              View
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          <?php endforeach; ?>
                      </div>
                  <?php endif; ?>


              <?php elseif ($view_mode == 'table'): ?>
                  <?php if (empty($events)): ?>
                      <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                          No events found matching your criteria.
                      </div>
                  <?php else: ?>
                      <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow">
                          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                              <thead class="bg-gray-50 dark:bg-gray-700">
                                  <tr>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                          Title
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                          Category
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                          Date & Time
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                          Location
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                          Action
                                      </th>
                                  </tr>
                              </thead>
                              <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                  <?php foreach ($events as $event): ?>
                                      <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                          <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                  <?php echo htmlspecialchars($event['title']); ?>
                                              </div>
                                          </td>
                                          <td class="px-6 py-4 whitespace-nowrap">
                                              <span class="inline-block bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full px-3 py-1 text-xs font-semibold">
                                                  <?php echo htmlspecialchars($event['category_name'] ?? 'Uncategorized'); ?>
                                              </span>
                                          </td>
                                          <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="text-sm text-gray-700 dark:text-gray-300">
                                                  <?php echo date('M j, Y', strtotime($event['event_date'])); ?>
                                              </div>
                                              <div class="text-sm text-gray-500 dark:text-gray-400">
                                                  <?php echo date('g:i A', strtotime($event['event_date'])); ?>
                                              </div>
                                          </td>
                                          <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="text-sm text-gray-700 dark:text-gray-300">
                                                  <?php echo htmlspecialchars($event['location']); ?>
                                              </div>
                                          </td>
                                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                              <a href="?view=<?php echo $view_mode; ?>&event_id=<?php echo $event['id']; ?><?php echo $link_extra_params; ?>"
                                                 class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">
                                                  View Details
                                              </a>
                                          </td>
                                      </tr>
                                  <?php endforeach; ?>
                              </tbody>
                          </table>
                      </div>
                  <?php endif; ?>


              <?php elseif ($view_mode == 'map'): ?>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                      <div id="mapView" class="h-96 w-full rounded-lg"></div>


                      <script>
                          document.addEventListener('DOMContentLoaded', function() {
                              // Ensure Leaflet is loaded
                              if (typeof L !== 'undefined') {
                                  const map = L.map('mapView').setView([20, 0], 2); // Default view


                                  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                  }).addTo(map);


                                  // Get PHP events data into JS - Use json_encode carefully
                                  // Ensure data passed to json_encode doesn't contain invalid UTF-8 chars
                                  // Use JSON_INVALID_UTF8_IGNORE if necessary on PHP >= 7.2
                                  const events = <?php echo json_encode($events, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE); ?>;
                                  const markers = [];
                                  const bounds = [];


                                  if (Array.isArray(events)) {
                                      events.forEach(event => {
                                          // Check for valid lat/lng AND ensure they are numbers
                                          const lat = parseFloat(event.latitude);
                                          const lon = parseFloat(event.longitude);


                                          if (!isNaN(lat) && !isNaN(lon)) {
                                               // Sanitize content for the popup
                                               const title = event.title ? event.title.replace(/'/g, "\\'").replace(/"/g, '\\"') : 'Untitled Event';
                                               const dateStr = event.event_date ? new Date(event.event_date).toLocaleDateString() : 'N/A';
                                               const timeStr = event.event_date ? new Date(event.event_date).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}) : 'N/A';
                                               const eventId = event.id;
                                               const detailsLink = `?view=<?php echo $view_mode; ?>&event_id=${eventId}<?php echo $link_extra_params; ?>`;


                                              const marker = L.marker([lat, lon])
                                                  .addTo(map)
                                                  .bindPopup(`
                                                      <div class="text-center p-1">
                                                          <h3 class="font-bold text-base mb-1">${title}</h3>
                                                          <p class="text-xs mb-2">${dateStr} - ${timeStr}</p>
                                                          <a href="${detailsLink}"
                                                             class="text-indigo-600 hover:underline text-xs font-medium">
                                                              View Details
                                                          </a>
                                                      </div>
                                                  `);
                                              markers.push(marker);
                                              bounds.push([lat, lon]);
                                          }
                                      });
                                  } else {
                                      console.error("Events data is not an array:", events);
                                  }




                                  if (bounds.length > 0) {
                                      map.fitBounds(bounds, { padding: [50, 50] }); // Add some padding
                                  } else {
                                      // Optional: Set a default view if no markers
                                      map.setView([40, -3], 5); // Example: Center on Spain if no events
                                  }
                              } else {
                                  console.error("Leaflet library not loaded.");
                              }
                          });
                      </script>


                      <?php if (empty($events) || !array_filter($events, function($e) { return !empty($e['latitude']) && !empty($e['longitude']) && is_numeric($e['latitude']) && is_numeric($e['longitude']); })): ?>
                          <div class="mt-4 bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                              <?php if (empty($events)): ?>
                                   No se encontraron eventos con ese criterio.
                              <?php else: ?>
                                   No se encontraron eventos en esa localización.
                              <?php endif; ?>
                          </div>
                      <?php endif; ?>
                  </div>


              <?php elseif ($view_mode == 'calendar'): ?>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                      <div id="calendarView" class="h-auto"></div>


                      <script>
                          document.addEventListener('DOMContentLoaded', function() {
                              // Ensure FullCalendar is loaded
                              if (typeof FullCalendar !== 'undefined') {
                                  const calendarEl = document.getElementById('calendarView');
                                  if (calendarEl) {
                                      const calendar = new FullCalendar.Calendar(calendarEl, {
                                          initialView: 'dayGridMonth',
                                          headerToolbar: {
                                              left: 'prev,next today',
                                              center: 'title',
                                              right: 'dayGridMonth,timeGridWeek,listWeek'
                                          },
                                          events: [
                                              <?php foreach ($events as $event): ?>
                                              {
                                                  id: '<?php echo $event['id']; ?>',
                                                  // Use addslashes for JS strings from PHP
                                                  title: '<?php echo addslashes(htmlspecialchars($event['title'])); ?>',
                                                  start: '<?php echo $event['event_date']; // Assuming Y-m-d H:i:s format ?>',
                                                  url: '?view=<?php echo $view_mode; ?>&event_id=<?php echo $event['id']; ?><?php echo $link_extra_params; ?>',
                                                  extendedProps: {
                                                      category: '<?php echo addslashes(htmlspecialchars($event['category_name'] ?? 'Uncategorized')); ?>'
                                                  },
                                                  // Optional: Add class based on category ID if needed for styling
                                                  classNames: ['event-category-<?php echo $event['category_id'] ?? 0; ?>']
                                              },
                                              <?php endforeach; ?>
                                          ],
                                          eventClick: function(info) {
                                              info.jsEvent.preventDefault(); // Prevent browser navigation
                                              if (info.event.url) {
                                                  window.location.href = info.event.url; // Go to the detail page
                                              }
                                          },
                                          // Handle potential loading errors for events
                                          loading: function(isLoading) {
                                               if (isLoading) {
                                                   // Optional: Add a loading indicator
                                               } else {
                                                   // Optional: Remove loading indicator
                                               }
                                           }
                                      });
                                      calendar.render();
                                  } else {
                                       console.error("Calendar container element #calendarView not found.");
                                  }


                              } else {
                                  console.error("FullCalendar library not loaded.");
                              }
                          });
                      </script>


                      <?php if (empty($events)): ?>
                          <div class="mt-4 bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                              No se encuentran eventos con tú criterio en el calendario.
                          </div>
                      <?php endif; ?>
                  </div>
              <?php endif; ?> <?php endif; ?> </main>
  </div> <?php
  // Cerrar la conexión con la base de datos
  if (isset($conn)) {
      mysqli_close($conn);
  }
  ?>
<?include 'assets/inc/_footer.php';?>