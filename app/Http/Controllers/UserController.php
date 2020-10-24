<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Traits\ApiResponser;
    use App\Model\User;
    use DB;

    Class UserController extends Controller {
        use ApiResponser;
        private $request;

        public function __construct(Request $request){
        $this->request = $request;
        }

        //login page
        public function loginPage(){
            return view('login');
        }

        //user validation
        public function validation(){
            
            $user_name = $_POST['username'];
            $username = DB::select("SELECT * FROM users WHERE username='$user_name'");

            $pass = $_POST['password'];
            $password = DB::select("SELECT * FROM users WHERE password='$pass'");

            if(!empty($username && $password)){
                return redirect()->route('dashboard');
            }else{
                return 'Invalid login credentials. Try again!';
            }
            
        }

        //dashboard
        public function dashboard(){
            $id = DB::select("SELECT id FROM users");
            $username = DB::select("SELECT username FROM users");
            $password = DB::select("SELECT password FROM users");

            return view('dashboard')->with(['id' => $id, 'username'=>$username,
            'password'=>$password]);
        }

        //create user
        public function createUser(Request $request){
            $this->validate($request, [
                'username' => 'required|max:30',
                'password' => 'required|min:6'
            ]);

            $users = DB::select("SELECT * FROM users");

            if(empty($users)){
                $user = new User;

                $user->id = (count($users)+ 1);
                $user->password = $request->input('password');
                $user->username = $request->input('username');

                if ($user->save()) {
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('dashboard');
                }
            }else{
                $idCount = DB::table('users')->latest('id')->first();
                $idCount = $idCount->id;
                $user = new User;

                $user->id=($idCount+1);
                $user->password = $request->input('password');
                $user->username = $request->input('username');

                if ($user->save()) {
                    return redirect()->route('dashboard');
                } else {
                    return redirect()->route('dashboard');
                }
            }
        }

        //create page
        public function createPage(){
            return view('create');
        }

        //update
        public function update(){
            $id = $_POST['search_ID'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            DB::table('users')->where('id', $id)->update(['username' => $username, 'password' => $password]);
            return redirect()->route('dashboard');
        }

        //edit page
        public function editPage(){
            $id = DB::select("SELECT id FROM users");
            $username = DB::select("SELECT username FROM users");
            $password = DB::select("SELECT password FROM users");

            return view('update')->with(
                ['id' => $id, 'username'=>$username,
                'password'=>$password]);
        }

        //delete user
        public function delete(){
            $user_delete = User::find($_POST['idDelete']);
            $user_delete->delete();
            return redirect()->route('dashboard');
        }

    }
?>