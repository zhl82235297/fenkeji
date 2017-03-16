<center>
	<table>
		<form action="index.php?r=user/add" method="post">
			<input type="hidden" name="id" value="<?=$row['id']; ?>" >
			<tr>
				<td>姓名</td>
				<td><input type="text" name="name" value="<?=$row['name']; ?>"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="pwd" value="<?=$row['pwd'] ?>"></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><input type="text" name="email" value="<?=$row['email']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</form>
	</table>
</center>