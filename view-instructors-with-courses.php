<h1>Instructors with Courses</h1>
<div class="card-group">

<?php
while ($instructor = $instructors->fetch_assoc()) {
?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instructor['Instructor_name']; ?></h5>
      <p class="card-text">
<?php
  $courses = selectCoursesByInstructor($instructor['Instructor_id']);
  While ($course = $courses->fetch_assoc()) {
 ?>
<?php
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Office: <?php echo $instructor['office_number']; ?></p>
    </div>
  </div>
<?php
}
?>
</div>
