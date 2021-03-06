# PHP Find and Replace JSON
Takes a JSON payload and replaces either a key or value from a provided array.

## Installation
Install via Composer

```php
composer require dcblogdev/php-find-and-replace-json
```

## Usage

Provide a json array and a array containing values to replace.

Create an instance of FindAndReplaceJson call replace and pass in the JSON array and array of replace values.

JSON is returned with the replaced values. Keys can also be replaced by specifiying named keys in $replaces array. 

```php
$payload = json_encode([
    'name'   => 'Joe Bloggs',
    'age'   => 23,
    'location' => 'London',
]);

//lets replace the values for age and location
$replaces = [
    'age' => 45, 
    'location' => "Manchester"
];

$runner = new FindAndReplaceJson();
return $runner->replace($payload, $replaces);
```

Result:

```php
{
  "name": "Joe Bloggs",
  "age": "45",
  "location": "Manchester"
}
```

By default JSON is expected but a normal array can be used by passing false as the third argument to FindAndReplaceJson.
When the set to false FindAndReplaceJson expects an array and will return an array.

## Contributing

Contributions are welcome and will be fully credited.

Contributions are accepted via Pull Requests on [Github][4].

## Pull Requests

- **Document any change in behaviour** - Make sure the `readme.md` and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer v2.0.0][5]. Randomly breaking public APIs is not an option.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

## Security

If you discover any security related issues, please email dave@dcblog.dev email instead of using the issue tracker.

## License

license. Please see the [license file][6] for more information.

[4]:    https://github.com/dcblogdev/find-and-replace-json
[5]:    http://semver.org/
[6]:    license.md

