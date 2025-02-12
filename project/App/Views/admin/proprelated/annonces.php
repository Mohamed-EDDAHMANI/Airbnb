<div class="bg-white shadow-md rounded-md overflow-hidden">
    <table class="min-w-full leading-normal">
            <thead>
            <tr>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Id
                </th>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Title
                </th>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Description
                </th>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Price
                </th>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Picture
                </th>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Available
                </th>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Location
                </th>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Status
                </th>
                <th class="px-3 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <!--  Loop through $annonces -->
            <?php if (isset($annonces) && is_array($annonces)): ?>
                <?php foreach ($annonces as $annonce): ?>
                    <tr>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <?= htmlspecialchars($annonce['id'] ?? '') ?>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?= htmlspecialchars($annonce['title'] ?? '') ?></p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?= htmlspecialchars($annonce['description'] ?? '') ?></p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?= htmlspecialchars($annonce['price'] ?? '') ?></p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?= htmlspecialchars($annonce['photo'] ?? '') ?></p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <?php
                            $disponibleText = ($annonce['disponible']) ? 'Yes' : 'No';
                            ?>
                            <p class="text-gray-900 whitespace-no-wrap"><?= htmlspecialchars($disponibleText ?? '') ?></p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?= htmlspecialchars($annonce['localisation'] ?? '') ?></p>
                        </td>

                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <?php
                            $statusClass = ($annonce['status'] === 'available') ? 'text-green-900 bg-green-200' : (($annonce['status'] === 'pending') ? 'text-yellow-900 bg-yellow-200' : 'text-red-900 bg-red-200');
                            ?>
                            <span class="relative inline-block px-2 py-1 font-semibold <?= $statusClass ?> leading-tight text-xs rounded-full">
                                <span aria-hidden class="absolute inset-0 opacity-50 rounded-full"></span>
                                <span class="relative"><?= htmlspecialchars($annonce['status'] ?? '') ?></span>
                            </span>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <div class="flex justify-center">
                                <form method="POST" action="/admin/pendingAnnonce" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($annonce['id'] ?? '') ?>">
                                    <button type="submit" class="text-yellow-500 hover:text-yellow-700 p-1 rounded-full">
                                        <i class="fas fa-clock fa-lg"></i>
                                    </button>
                                </form>
                                <form method="POST" action="/admin/validationAnnonce" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($annonce['id'] ?? '') ?>">
                                    <button type="submit" class="text-green-500 hover:text-green-700 p-1 rounded-full">
                                        <i class="fas fa-check fa-lg"></i>
                                    </button>
                                </form>
                                <form method="POST" action="/admin/deleteAnnonce" class="inline-block">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($annonce['id'] ?? '') ?>">
                                    <button type="submit" class="text-red-500 hover:text-red-700 p-1 rounded-full">
                                        <i class="fas fa-trash fa-lg"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="10" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">No annonces found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
    </table>
</div>