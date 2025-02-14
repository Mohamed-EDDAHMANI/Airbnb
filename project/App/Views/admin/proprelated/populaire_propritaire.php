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
<div class="bg-white shadow-md rounded-lg overflow-hidden transition duration-300 ease-in-out hover:shadow-xl">
    <div class="px-6 py-4 border-b border-gray-200 flex justify-center items-center bg-white">
        <h2 class="text-xl font-semibold text-gray-800">Propritaire</h2>
    </div>
    <div class="overflow-x-auto hide-scrollbar">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Connection</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Joined Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php if (isset($Owners) && is_array($Owners)): ?>
                <?php foreach ($Owners as $Owner): ?>
                    <tr class="group transition-all duration-200 ease-in-out hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <?= htmlspecialchars($Owner['id'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900 group-hover:text-blue-600">
                                <?= htmlspecialchars($Owner['name'] ?? '') ?>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 group-hover:text-gray-700">
                            <?= htmlspecialchars($Owner['email'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full <?= ($Owner['is_active'] ?? false) ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' ?>">
                                <?= ($Owner['is_active'] ?? false) ? 'Active' : 'Inactive' ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full <?= ($Owner['is_connected'] ?? false) ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' ?>">
                                <?= ($Owner['is_connected'] ?? false) ? 'Online' : 'Offline' ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <?php
                            $date = new DateTime($Owner['created_at'] ?? 'now');
                            echo $date->format('M d, Y');
                            ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-3">
                                <button class="tooltip text-blue-600 hover:text-blue-900 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-blue-50">
                                    <i class="fas fa-eye"></i>
                                    <span class="tooltip-text">View Details</span>
                                </button>
                                <button class="tooltip <?= ($Owner['is_active'] ?? false) ? 'text-red-600 hover:text-red-900 hover:bg-red-50' : 'text-green-600 hover:text-green-900 hover:bg-green-50' ?> transition-all duration-200 hover:scale-110 transform p-1 rounded-full">
                                    <i class="fas <?= ($Owner['is_active'] ?? false) ? 'fa-ban' : 'fa-check-circle' ?>"></i>
                                    <span class="tooltip-text"><?= ($Owner['is_active'] ?? false) ? 'Deactivate Owner' : 'Activate Owner' ?></span>
                                </button>
                                <button class="tooltip text-red-600 hover:text-red-900 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-red-50">
                                    <i class="fas fa-trash"></i>
                                    <span class="tooltip-text">Delete Owner</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            <div class="flex flex-col items-center py-6">
                                <i class="fas fa-users text-gray-400 text-4xl mb-2"></i>
                                <span class="text-gray-500">No owners found.</span>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>