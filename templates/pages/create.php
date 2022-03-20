<div>
  <h3> nowa notatka </h3>
  <!-- Formularz do dodawania notatek -->
  <div>
    <from class="note-form" action="/?action=create" method="post">
      <ul>
        <li>
          <label>Tytuł<span class="requied">*</span></label>
          <input type="text" name="title" classs="filed-log" />
        </li>
        <li>
          <label>Opis</label>
          <textarea name="description" id="field5"
        class="field=long filed-textarea" ></textarea>
        </li>
        <li>
          <input type="submit" value="Submit">
        </li>
      </ul>
    </from>
  </div>
</div>
