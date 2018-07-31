## 1. Bcrypt

### Installation
```composer require bmutinda/hashing```

#### Encrypt (Create a hashed string)
```
$bcrypt = new \Bmutinda\Hashing\Bcrypt();
$hashed = $bcrypt->hash($password);
```

#### Compare hash with a plain string
```
$bcrypt = new \Bmutinda\Hashing\Bcrypt();
$password = "My plain password";
$hashedPassword = "Long hashed string";
$isValid = $bcrypt->verify($password, $hashedPassword)
```


#### Running tests
Run this command from your terminal inside the project root

`
vendor/bin/phpunit tests/
`