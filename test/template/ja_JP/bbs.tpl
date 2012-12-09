<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		{include file="inc/header.tpl"}
    </head>
    <body>
		<div id="title">ひとこと掲示板</div>
		<div class="gradient_box"></div>
		<div class="picture_box">{$app.user_id}の一言掲示板</div>
		<div class="sample">test</div>

		<p>
			{form ethna_action="bbs"}
				<input type="text" name="tag" value="tag"/>
				<input class="form_box" type="text" name="description" value="ひとこと" />
				<input type="submit" value="投稿" onClick="BBS.Murmur_error(tag.value,description.value)"/>
			{/form}
		</p>

		<hr />
		{foreach from=$app.content item=content}
			<div>{$content.tag}</div>
			<div>{$content.description}</div>
			<div>{$content.ID}</div>
			<p>
				{form ethna_action="bbs_delete"}
					<input type="submit" value="削除" />
					<input type="hidden" name="id" value={$content.ID} />
				{/form} 
			</p>
			<hr />
		{/foreach}
		<p>
			{form ethna_action="bbs_form"}
				<input type="submit" value="投稿フォーム" />
			{/form} 
		</p>
    </body>
</html>
