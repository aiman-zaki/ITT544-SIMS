
<div class = "container">
        <div class = "card">
        <table class = "table">
                <thead>
                    <tr>
                        <th scope = "col">#</th>
                        <th scope = "col">Email</th>
                        <th scope = "col">First Name</th>
                        <th scope = "col">Last Name</th>
                        <th scope = "col">Role</th>
                        <th scope = "col">Created</th>
                        <th scope = "col">Modified</th>
                        <th scope = "col">View</th>
                        <th scope = "col">Edit</th>
                        <th scope = "col">Delete</th>
                    </tr>
                <thead>
            <tbody class = "table-border">
              
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->fname) ?></td>
                    <td><?= h($user->lname) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td><?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?> </td>
                    <td><?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?> </td> 
                    <td><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?></td>
                <?php endforeach; ?>
                </tr>
            <tbody>
        
        </table>
    </div>
</div>
   

