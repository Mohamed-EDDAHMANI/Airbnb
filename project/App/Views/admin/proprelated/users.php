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
</style>
<div class="bg-white shadow-md rounded-lg overflow-hidden transition duration-300 ease-in-out hover:shadow-xl">
    <div class="px-6 py-4 border-b border-gray-200 flex justify-center items-center bg-white">
        <h2 class="text-xl font-semibold text-gray-800">All Users</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Username
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Role
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php if (isset($users) && is_array($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr class="group transition-all duration-200 ease-in-out hover:bg-gray-50 cursor-pointer">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 group-hover:text-gray-700">
                            <?= htmlspecialchars($user['id'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900 group-hover:text-blue-600">
                                        <?= htmlspecialchars($user['name'] ?? '') ?>
                                    </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 group-hover:text-gray-700">
                            <?= htmlspecialchars($user['email'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <?php
                            $roleClass = match(strtolower($user['role'] ?? '')) {
                                'admin' => 'bg-purple-100 text-purple-800 group-hover:bg-purple-200',
                                'proprietaire' => 'bg-blue-100 text-blue-800 group-hover:bg-blue-200',
                                'voyageur' => 'bg-green-100 text-green-800 group-hover:bg-green-200',
                                default => 'bg-gray-100 text-gray-800 group-hover:bg-gray-200'
                            };
                            ?>
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full transition-colors duration-200 <?= $roleClass ?>">
                                <?= htmlspecialchars($user['role'] ?? '') ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <?php
                            $statusClass = ($user['is_active'] ?? false) 
                                ? 'bg-green-100 text-green-800 group-hover:bg-green-200' 
                                : 'bg-red-100 text-red-800 group-hover:bg-red-200';
                            $statusText = ($user['is_active'] ?? false) ? 'Active' : 'Inactive';
                            ?>
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full transition-colors duration-200 <?= $statusClass ?>">
                                <?= $statusText ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-3">
                                <form method="POST" action="/admin/toggleUserStatus" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id'] ?? '') ?>">
                                    <button type="submit" class="tooltip text-blue-600 hover:text-blue-900 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-blue-50">
                                        <i class="fas fa-power-off"></i>
                                        <span class="tooltip-text"><?= ($user['is_active'] ?? false) ? 'Deactivate' : 'Activate' ?></span>
                                    </button>
                                </form>
                                <form method="POST" action="/admin/deleteUser" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id'] ?? '') ?>">
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
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            <div class="flex flex-col items-center py-6">
                                <i class="fas fa-users text-gray-400 text-4xl mb-2"></i>
                                <span class="text-gray-500">No users found.</span>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="mt-8 bg-white shadow-md rounded-lg overflow-hidden transition duration-300 ease-in-out hover:shadow-xl">
    <div class="px-6 py-4 border-b border-gray-200 flex justify-center items-center bg-white">
        <h2 class="text-xl font-semibold text-gray-800">Deleted Users</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Username
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Role
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Deleted At
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php if (isset($deletedUsers) && is_array($deletedUsers) && !empty($deletedUsers)): ?>
                <?php foreach ($deletedUsers as $Duser): ?>
                    <tr class="group transition-all duration-200 ease-in-out hover:bg-gray-50 cursor-pointer">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 group-hover:text-gray-700">
                            <?= htmlspecialchars($Duser['id'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900 group-hover:text-blue-600">
                                    <?= htmlspecialchars($Duser['name'] ?? '') ?>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 group-hover:text-gray-700">
                            <?= htmlspecialchars($Duser['email'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <?php
                            $roleClass = match(strtolower($Duser['role'] ?? '')) {
                                'admin' => 'bg-purple-100 text-purple-800 group-hover:bg-purple-200',
                                'proprietaire' => 'bg-blue-100 text-blue-800 group-hover:bg-blue-200',
                                'voyageur' => 'bg-green-100 text-green-800 group-hover:bg-green-200',
                                default => 'bg-gray-100 text-gray-800 group-hover:bg-gray-200'
                            };
                            ?>
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full transition-colors duration-200 <?= $roleClass ?>">
                                <?= htmlspecialchars($Duser['role'] ?? '') ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 group-hover:text-gray-700">
                            <?= htmlspecialchars($Duser['deleted_at'] ?? '') ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-3">
                                <form method="POST" action="/admin/restoreUser" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($Duser['id'] ?? '') ?>">
                                    <button type="submit" class="tooltip text-green-500 hover:text-green-700 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-green-50">
                                        <i class="fas fa-undo"></i>
                                        <span class="tooltip-text">Restore</span>
                                    </button>
                                </form>
                                <form method="POST" action="/admin/permanentDeleteUser" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($Duser['id'] ?? '') ?>">
                                    <button type="submit" class="tooltip text-red-500 hover:text-red-700 transition-all duration-200 hover:scale-110 transform p-1 rounded-full hover:bg-red-50">
                                        <i class="fas fa-trash-alt"></i>
                                        <span class="tooltip-text">Permanent Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            <div class="flex flex-col items-center py-6">
                                <i class="fas fa-trash text-gray-400 text-4xl mb-2"></i>
                                <span class="text-gray-500">No deleted users found.</span>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>