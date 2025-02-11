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
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['role']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>