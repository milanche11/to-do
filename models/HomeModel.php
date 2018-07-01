<?php

	class HomeModel extends Model{

		public function Index(){

			$this->query('SELECT * FROM options ORDER BY `id` ASC');
			$res = $this->resultSet();
			

			if(isset($_POST['submit'])){

						$po = $_POST['text'];
						$this->query('INSERT INTO options (valuee) VALUES (:valuee)');
						$this->bind(':valuee', $po);
						$this->execute();
						header('Location: '.ROOT_URL);

			}

			if(isset($_POST['dell'])){

						$id = $_POST['dell'];
						$this->query('DELETE FROM options WHERE id = (:id)');
						$this->bind(':id', $id);
						$this->execute();
						header('Location: '.ROOT_URL);

			}

			if(isset($_POST['csv'])){

						$f = fopen("download.csv", "w");
						foreach ($res as $line) {
						    fputcsv($f, $line);
						}
						fclose($f);
						header('Location: '.ROOT_URL.'download.csv');

			}

			return $res;	

		}

	}
