<li data-id=<?= $todo['id'] ?> <?= $todo['completed'] === "true" ? 'class="completed"' : "" ?>>
  <form class="view" method="POST" action="/usertodos/<?= $_SESSION['userId'] ?>/<?= $todo['id'] ?>">
    <input type="hidden" name="_METHOD" value="PATCH" />
    <input type="hidden" name="title" value="<?= $todo['title']; ?>" />
    <input name="status" class="toggle" type="checkbox" <?= $todo['completed'] === "true" ? 'checked="true"' : "" ?>
    onChange="submit();">
    <label id=<?= $todo['id'] ?>><?= $todo['title']; ?></label>
    <a class="button destroy" href="/usertodos/<?= $_SESSION['userId'] ?>/<?= $todo['id'] ?>/delete"
      name="remove"></a>
  </form>
</li>