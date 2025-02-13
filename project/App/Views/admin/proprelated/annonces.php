<!-- Add tooltip styles -->
<style>
    .tooltip {
        position: relative;
    }

    .tooltip-text {
        visibility: hidden;
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        text-align: center;
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 12px;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.2s;
        z-index: 10;
    }

    .tooltip:hover .tooltip-text {
        visibility: visible;
        opacity: 1;
    }

    .tooltip-text::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: rgba(0, 0, 0, 0.8) transparent transparent transparent;
    }

    .hide-scrollbar {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }
</style>

<!-- Card container with hover effect -->
<div class="bg-white shadow-md rounded-lg overflow-hidden transition duration-300 ease-in-out hover:shadow-xl">
    <!-- Header -->
    <div class="px-6 py-4 border-b border-gray-200 flex justify-center items-center bg-white">
        <h2 class="text-xl font-semibold text-gray-800">Annonces</h2>
    </div>

    <!-- Table container -->
    <div class="overflow-x-auto hide-scrollbar">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Picture</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Available</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php if (isset($annonces) && is_array($annonces)): ?>
                <?php foreach ($annonces as $annonce): ?>
                    <tr class="group transition-all duration-200 ease-in-out hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <?= htmlspecialchars($annonce['id'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-medium text-gray-900 group-hover:text-blue-600">
                                <?= htmlspecialchars($annonce['title'] ?? '') ?>
                            </p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-gray-500 group-hover:text-gray-700 line-clamp-2">
                                <?= htmlspecialchars($annonce['description'] ?? '') ?>
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-medium text-gray-900">
                                $<?= number_format($annonce['price'] ?? 0, 2) ?>
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="h-10 w-10 rounded-lg overflow-hidden bg-gray-100">
                                <img 
                                    src="<?= htmlspecialchars($annonce['photo'] ?? '/api/placeholder/40/40') ?>" 
                                    alt="Property" 
                                    class="h-full w-full object-cover"
                                >
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full <?= ($annonce['disponible']) ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' ?>">
                                <?= ($annonce['disponible']) ? 'Yes' : 'No' ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <?= htmlspecialchars($annonce['localisation'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php
                            $statusClass = match($annonce['status'] ?? '') {
                                'available' => 'bg-green-100 text-green-800',
                                'pending' => 'bg-yellow-100 text-yellow-800',
                                default => 'bg-red-100 text-red-800'
                            };
                            ?>
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full <?= $statusClass ?>">
                                <?= ucfirst(htmlspecialchars($annonce['status'] ?? '')) ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-3">
                                <!-- View button -->
                                <button class="tooltip text-blue-600 hover:text-blue-900 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-blue-50">
                                    <i class="fas fa-eye"></i>
                                    <span class="tooltip-text">View Details</span>
                                </button>

                                <!-- Pending button -->
                                <form method="POST" action="/admin/pendingAnnonce" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($annonce['id'] ?? '') ?>">
                                    <button type="submit" class="tooltip text-yellow-500 hover:text-yellow-700 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-yellow-50">
                                        <i class="fas fa-clock"></i>
                                        <span class="tooltip-text">Mark as Pending</span>
                                    </button>
                                </form>

                                <!-- Validation button with updated icon -->
                                <form method="POST" action="/admin/validationAnnonce" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($annonce['id'] ?? '') ?>">
                                    <button type="submit" class="tooltip text-green-500 hover:text-green-700 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-green-50">
                                        <i class="fas fa-check-circle"></i>
                                        <span class="tooltip-text">Validate</span>
                                    </button>
                                </form>

                                <!-- Delete button -->
                                <form method="POST" action="/admin/deleteAnnonce" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($annonce['id'] ?? '') ?>">
                                    <button type="submit" class="tooltip text-red-500 hover:text-red-700 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-red-50">
                                        <i class="fas fa-trash"></i>
                                        <span class="tooltip-text">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            <div class="flex flex-col items-center py-6">
                                <i class="fas fa-home text-gray-400 text-4xl mb-2"></i>
                                <span class="text-gray-500">No Annoces found.</span>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>