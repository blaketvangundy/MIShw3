<?php
function selectSectionsByCourse($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.course_id, course_number, course_description, semester, room, day_time FROM `homework#3`.course c join section s on s.course_id = c.course_id where s.course_id = ?");
        $stmt->bind_param("i", $cid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
