public function f_name(){
        $this->leads = Model_name::where('name', 'like','%' . $this->search . '%')
        ->orWhere('email', 'like','%' . $this->search . '%')
        ->orWhere('phone', 'like','%' . $this->search . '%')
        ->get();
        
    }
