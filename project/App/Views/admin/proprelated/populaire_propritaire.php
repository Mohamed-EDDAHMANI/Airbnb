<div class="bg-white shadow-md rounded-md overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Is_active</th>
                    <th>Is_connected</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
               <?php if (isset($annonces) && is_array($annonce)): ?>
               <?php foreach ($annonces as $annonce): ?>
                   <tr>
                       <td><?= htmlspecialchars($annonce['id'] ?? '') ?></td>
                       <td><?= htmlspecialchars($annonce['name'] ?? '') ?></td>
                       <td><?= htmlspecialchars($annonce['email'] ?? '') ?></td>
                       <td><?= htmlspecialchars($annonce['password'] ?? '') ?></td>
                       <td><?= htmlspecialchars($annonce['is_active'] ?? '') ?></td>
                       <td><?= htmlspecialchars($annonce['is_connected'] ?? '') ?></td>
                       <td><?= htmlspecialchars($annonce['created_at'] ?? '') ?></td>
                   </tr>
               <?php endforeach; ?>
               <?php else: ?>
                   <tr><td colspan="4">No users found.</td></tr>
               <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>