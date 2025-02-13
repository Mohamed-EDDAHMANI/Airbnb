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
        <h2 class="text-xl font-semibold text-gray-800">Revenus Mensuels</h2>
    </div>

    <!-- Table container -->
    <div class="overflow-x-auto hide-scrollbar">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Month</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Revenue</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php if (isset($Revenux) && is_array($Revenux)): ?>
                    <?php foreach ($Revenux as $Revenu): ?>
                        <tr class="group transition-all duration-200 ease-in-out hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <?= date('F Y', strtotime($Revenu['month'])) ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <p class="text-sm font-medium text-gray-900">
                                    $<?= number_format($Revenu['total_revenue'] ?? 0, 2) ?>
                                </p>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            <div class="flex flex-col items-center py-6">
                                <i class="fas fa-chart-line text-gray-400 text-4xl mb-2"></i>
                                <span class="text-gray-500">No revenue data found.</span>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
