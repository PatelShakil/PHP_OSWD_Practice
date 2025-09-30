# PHP
> What is `Location` in `header()` ?
- it is used to set **Response Header** parameters.

## Magic Methods
- `__construct()`
- `__distruct()`
- `__toString()`
> Variables declared with `const` is accessed using `classname::variablename` using scope resolution operator (`::`)
- `parent` keyword used to access super class properties.
- `__sleep()`
- `__wakeup()`
- `serialize()` -> `__sleep()`
- `unserialize()` -> `__wakeup()`

## PDO (PHP Data Object)
- provides Database agnostic approach.
```
try{

$DBH = new PDO("mysql:host=localhost;dbname=db",$user,$pass);

$sql = "SELECT * FROM users";

    foreach($DBH->query($sql) as $row){
        print $row['name'] . '<br />';
    }
    
}catch(PDOException $e){
    echo $e->getMessage();
}
```
