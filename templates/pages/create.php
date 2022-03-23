<div>
  <h3> Nowa notatka </h3>
  <!-- Formularz do dodawania notatek -->
  <div>
  <?php if (!empty($params['created'])) : ?>
  </div>
    <div>Tytuł: <?php echo $params['title'] ?></div>
    <div>Treść: <?php echo $params['description'] ?></div>
  <div>
    <?php else: ?>
    <from class="note-form" action="/note/?action=create" method="post">
      <ul>
        <li>
          <label>Tytuł<span class="required">*</span></label>
          <input type="text" name="title" classs="field-long" />
        </li>
        <li>
          <label>Treść</label>
          <textarea name="description" id="field5"
        class="field-long filed-textarea" ></textarea>
        </li>
        <li>
          <input type="submit" value="Wyślij">
        </li>
      </ul>
    </from>
    <?php endif;?>
  </div>
</div>
