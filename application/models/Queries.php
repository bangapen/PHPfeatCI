<?php
	class Queries extends CI_Model{
		
		public function getPosts(){
			$query = $this->db->get('posts');
			if($query->num_rows()!=0)
				return $query->result();
		}

		public function add_post($data){
			return $this->db->insert('posts', $data);
		}

		
		public function getThisPost($id){
			$query = $this->db->get_where('posts', array('id'=>$id));
			if($query->num_rows()!=0)
				return $query->row();
		}

		public function deleteThisPost($id){
			return $this->db->delete('posts', ['id'=>$id]);
		}

		public function update_post($id,$data){
			return $this->db->where('id', $id)->update('posts', $data);
		}

	}
?>