<h2>All Users</h2>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($users) && is_array($users)): ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id'] ?? '') ?></td>
                <td><?= htmlspecialchars($user['name'] ?? '') ?></td>
                <td><?= htmlspecialchars($user['email'] ?? '') ?></td>
                <td><?= htmlspecialchars($user['role'] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No users found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>