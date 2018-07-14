<?

/**
 * Library actions.
 *
 * @package    Library
 * @subpackage Library
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class LibraryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    if (!empty($request->getParameter('top')))
    {
      $this->bookList = Doctrine::getTable('Book')->getTop100Books();
    }
    elseif (!empty($request->getParameter('new')))
    {
      $this->bookList = Doctrine::getTable('Book')->getNew100Books();
    }
    elseif (!empty($request->getParameter('genreId')))
    {
      $this->bookList = Doctrine::getTable('Book')->findByGenre($request->getParameter('genreId'));
    }
    elseif (!empty($request->getParameter('authorId')))
    {
      $this->bookList = Doctrine::getTable('Book')->findByAuthor($request->getParameter('authorId'));
    }
    else
    {
      $this->bookList = Doctrine::getTable('Book')->getAllBooks();
    }

    $this->genreList = Doctrine::getTable('Genre')->getAllGenres();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->book = Doctrine::getTable('Book')->find($request->getParameter('bookId'));
    $this->genreList = Doctrine::getTable('Genre')->getAllGenres();
    $this->user = Doctrine::getTable('User')->findUserByLogin($this->getUser()->getAttribute('userLogin'));
    $this->bookCommentList = Doctrine::getTable('Comment')->findBookComment($request->getParameter('bookId'));
    $this->forward404Unless($this->book);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->genreList = Doctrine::getTable('Genre')->getAllGenres();
    $this->authorList = Doctrine::getTable('Author')->getAllAuthors();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $book = new Book() ;
    $this->saveChange($request, $book);
    $this->redirect('Library/show?bookId=' . $book->getBookId());
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->genreList = Doctrine::getTable('Genre')->getAllGenres();
    $this->book = Doctrine::getTable('Book')->find($request->getParameter('bookId'));
    $this->authorList = Doctrine::getTable('Author')->getAllAuthors();
  }

  public function executeChangeBook(sfWebRequest $request)
  {
    $book = Doctrine::getTable('Book')->find($request->getParameter('bookId'));
    $this->saveChange($request, $book);
    $this->redirect('Library/show?bookId=' . $request->getParameter('bookId'));
  }

  public function saveChange(sfWebRequest $request, Book $book)
  {
    $uploadDir = 'images';
    $file = $_FILES;
    $fileName = $file["image"]['name'];
    if (move_uploaded_file($file["image"]['tmp_name'], "$uploadDir/$fileName"))
    {
      $book->illustration = "/$uploadDir/$fileName";
    }
    $book->name = $request->getParameter('bookName');
    $book->id_author = $request->getParameter('bookAuthor');
    $book->year_create = $request->getParameter('bookYear');
    $book->id_genre = $request->getParameter('bookGenre');
    $book->fact = $request->getParameter('bookFact');
    $book->save();
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($book = Doctrine::getTable('Book')->find($request->getParameter('bookId')), sprintf('Object book does not exist (%s).', $request->getParameter('bookId')));
    $this->form = new BookForm($book);
    $this->genreList = Doctrine::getTable('Genre')->getAllGenres();
    $this->processForm($request, $this->form);
    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->forward404Unless($book = Doctrine::getTable('Book')->find($request->getParameter('bookId')), sprintf('Object book does not exist (%s).', $request->getParameter('bookId')));
    $book->delete();
    $this->redirect('Library/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()));
    if ($form->isValid())
    {
      $book = $form->save();
      $this->redirect('Library/edit?bookId=' . $book['id_book']);
    }
  }

  public function executeSearch(sfWebRequest $request)
  {
    if (!empty($request->getParameter('strSearch')))
    {
      $this->bookList = Doctrine::getTable('Book')->findBook($request->getParameter('strSearch'));
      $this->genreList = Doctrine::getTable('Genre')->getAllGenres();
      $this->setTemplate('index');
    }
  }

  public function executeAuthor()
  {
    $this->authorList = Doctrine::getTable('Author')->getAllAuthors();
    $this->genreList = Doctrine::getTable('Genre')->getAllGenres();
  }

  public function executeRegistration(sfWebRequest $request)
  {
    $create = $request->getParameter('create');
    $auth = $request->getParameter('auth');

    if (isset($create))
    {
      $this->addNewUser($request);
    }
    elseif (isset($auth))
    {
      $this->authorizationUser($request);
    }
  }

  public function authorizationUser(sfWebRequest $request)
  {
    $login = $request->getParameter('login');
    $pass = $request->getParameter('pass');

    if ((isset($login)) && (isset($pass)))
    {
      $isFoundUser = Doctrine::getTable('User')->findUserByLoginAndPass($login, $pass);

      if ($isFoundUser)
      {
        $this->getUser()->setAttribute('userLogin', $login);
        $this->getUser()->setAuthenticated(true);
        $this->redirect('Library/userProfile');
      }
    }
  }

  public function addNewUser(sfWebRequest $request)
  {
    $login = $request->getParameter('login');
    $pass = $request->getParameter('pass');
    $userName = $request->getParameter('userName');

    if ((!empty($login)) && (!empty($pass)) && (!empty($userName)))
    {
      $isFoundUser = Doctrine::getTable('User')->findUserByLogin($login);

      if (empty($isFoundUser))
      {
        $this->saveNewUser($request);
        $this->getUser()->setAttribute('userLogin', $login);
        $this->getUser()->setAuthenticated(true);
        $this->redirect('Library/userProfile');
      }
    }
  }

  public function saveNewUser(sfWebRequest $request)
  {
    $this->userRole = Doctrine::getTable('Role')->getRole('user');
    $user = new User();
    $user->login = $request->getParameter('login');
    $user->password = $request->getParameter('pass');
    $user->name = $request->getParameter('userName');
    $user->id_role = $this->userRole->getRoleId();
    $user->save();
  }

  public function executeUserProfile()
  {
    $this->user = Doctrine::getTable('User')->findUserByLogin($this->getUser()->getAttribute('userLogin'));
    $this->commentList = Doctrine::getTable('Comment')->getComment($this->getUser()->getAttribute('userLogin'));
    $this->viewList = Doctrine::getTable('View')->getView($this->getUser()->getAttribute('userLogin'));
    $this->genreList = Doctrine::getTable('Genre')->getAllGenres();
    $this->userList = Doctrine::getTable('User')->getAllUser($this->getUser()->getAttribute('userLogin'));
    $this->lastCommentList = Doctrine::getTable('Comment')->getLastComment($this->getUser()->getAttribute('userLogin'));
  }

  public function executeLogOut()
  {
    $this->getUser()->getAttributeHolder()->remove('userLogin');
    $this->getUser()->setAuthenticated(false);
    $this->redirect('Library/index');
  }

  public function executeAddNewComment(sfWebRequest $request)
  {
    $comment = new Comment();
    $comment->comment = $request->getParameter('newComment');
    $comment->rating = $request->getParameter('rating') ? $request->getParameter('rating') : 0;
    $comment->id_book = $request->getParameter('bookId');
    $comment->id_user = $request->getParameter('userId');

    $comment->save();
    $this->updateBookRating($request);
    $this->redirect('Library/show?bookId=' . $request->getParameter('bookId'));
  }

  public function updateBookRating(sfWebRequest $request)
  {
    $book = Doctrine::getTable('Book')->find($request->getParameter('bookId'));
    $rating = Doctrine::getTable('Comment')->getBookRating($request->getParameter('bookId'));
    $book->rating = $rating->getrating();
    $book->save();
  }

  public function executeDeleteUser(sfWebRequest $request)
  {
    $user = Doctrine::getTable('User')->find($request->getParameter('userId'));
    $user->delete();
    $this->setTemplate('userProfile');
  }

  public function executeChangeAvatarUser(sfWebRequest $request)
  {
    $userAvatar = $request->getParameter('avatarUser');
    $user = Doctrine::getTable('User')->findUserByLogin($this->getUser()->getAttribute('userLogin'));
    if (isset($userAvatar))
    {
      $uploadDir = 'images';
      $files = $_FILES;
      $fileName = '';
      foreach ($files as $file)
      {
        $fileName = $file['name'];
        if (move_uploaded_file($file['tmp_name'], "$uploadDir/$fileName"))
        {
          $user->avatar = "/$uploadDir/$fileName";
          $user->save();
        }
      }
    }
    $this->setTemplate('userProfile');
  }

  public function executeView(sfWebRequest $request)
  {
    $user = Doctrine::getTable('User')->findUserByLogin($this->getUser()->getAttribute('userLogin'));
    $view = new View();
    $view->id_user = $user->getUserId();
    $view->id_book = $request->getParameter('bookId');
    $view->save();
    $this->setTemplate('show');
  }
}




