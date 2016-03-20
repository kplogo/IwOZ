<?php

namespace App\Services;

class NotesService extends BaseService
{

    public function getAll()
    {
        $app['db.orm.em']->createQuery('SELECT a FROM App\Model\User a');
        return $this->db->fetchAll("SELECT * FROM notes");
    }

    function save($note)
    {
        $this->db->insert("notes", $note);
        return $this->db->lastInsertId();
    }

    function update($id, $note)
    {
        return $this->db->update('notes', $note, ['id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete("notes", array("id" => $id));
    }

}
