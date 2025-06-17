<!-- <?php

protected function validator(array $data)

{
    return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'description'=>['required', 'string']
    ]);
}

protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'description' => $data['description'] ?? null,
        'password' => Hash::make($data['password']),
    ]);
} -->

