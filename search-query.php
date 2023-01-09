public function f_name(){
        $this->$public_variable_name(populate data from related Model) = Model_name::where('name', 'like','%' . $this->search . '%')
        ->orWhere('email', 'like','%' . $this->search . '%')
        ->orWhere('phone', 'like','%' . $this->search . '%')
        ->get();
        
    }
