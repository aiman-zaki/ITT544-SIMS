<?php foreach ($users as $user): ?>
<div class = "container">
        <div class = "card">
        <table class = "table">
                <thead>
                    <tr>
                        <th scope = "col">#</th>
                        <th scope = "col">Username</th>
                        <th scope = "col">Password</th>
                        <th scope = "col">Role</th>
                        <th scope = "col">Created</th>
                        <th scope = "col">Modified</th>
                        <th scope = "col">View</th>
                        <th scope = "col">Edit</th>
                        <th scope = "col">Delete</th>
                    </tr>
                <thead>
            <tbody class = "table-border">
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td><?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?> </td>
                    <td><?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?> </td> 
                    <td><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            <tbody>
        </tr>
        </table>
    </div>
</div>
   
<?php endforeach; ?>
