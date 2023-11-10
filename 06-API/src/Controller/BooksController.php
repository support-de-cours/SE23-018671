<?php
namespace App\Controller;

use App\Abstract\AbstractController;

class BooksController extends AbstractController
{
    public function index()
    {
        $books = $this->model->all();

        return $this->render('books/index', [
            'books' => $books
        ]);
    }

    public function create()
    {
        $crsf_token  = $_SESSION['crsf_token'];
        $title       = null;
        $description = null;
        $price       = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $errors = [];


            // Verification du token CRSF
            // --

            // if (!check_crsf_token( $_POST['_crsf'] ?? null ))
            // {
            //     array_push($errors, "Invalid Token");
            // }


            // Recupération de données du formulaire
            // --
            
            $title       = $_POST['title'] ?? null;
            $description = $_POST['description'] ?? null;
            $price       = $_POST['price'] ?? null;



            // Controle des donnée 
            // ---

            if (empty($title))
            {
                array_push($errors, "Le titre du livre est requis");
            }
            // ...

            if (empty($description))
            {
                array_push($errors, "La description du livre est requis");
            }
            // ...

            if (empty($price))
            {
                array_push($errors, "Le price du livre est requis");
            }
            // ...


            // Enregistrement des données
            // ---

            if (empty($errors))
            {
                unset($_POST['_crsf']);
                $id = $this->model->add($_POST);

                if ($id)
                {
                    header("location: ". url('book:read', ['id' => $id]));
                    exit;
                }
            }

            else {
                print_r($errors);
                // exit;
            }
        }

        return $this->render('books/create', [
            'crsf_token'  => $crsf_token,
            'title'       => $title,
            'description' => $description,
            'price'       => $price,
        ]);
    }

    public function read($id)
    {
        $book = $this->model->one($id);

        return $this->render('books/read', [
            'book' => $book
        ]);
    }

    public function update($id)
    {
        $book = $this->model->one($id);

        return $this->render('books/update');
    }

    public function delete($id)
    {
        return $this->render('books/delete');
    }

    // ----- API ----------

    public function index_api()
    {
        return $this->json(
            $this->model->all(),
            'api:book:read'
        );
    }

    public function read_api($id)
    {
        $book = $this->model->one($id);
        $book = [$book];

        return $this->json(
            $book,
            'api:book:read'
        );
    }
}

