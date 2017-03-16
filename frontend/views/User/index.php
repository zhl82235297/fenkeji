<table>
	<tr>
		<td>用户名</td>
		<td>邮箱</td>
		<td>操作</td>
	</tr>
	<?php foreach($data as $v){ ?>
		<tr>
			<td><?= $v['name']; ?></td>
			<td><?= $v['email']; ?></td>
			<td><a href="index.php?r=user/add&id=<?= $v['id']; ?>">修改</a>||
			<a href="index.php?r=user/del&id=<?= $v['id']; ?>">删除</a>
			</td>
		</tr>
	<?php } ?>
</table>