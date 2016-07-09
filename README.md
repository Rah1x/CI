# CI-Practive
Code Ignitor 3.x practive

Cloned (and updating `system`) from https://github.com/bcit-ci/CodeIgniter (branch `Develop`)

Here is what I have done in general:

1. Move all but `view` outside the root and set the path in frontController; the view is moved to `publi_html` instead = Added Security

2. Using `OPCache` for file cache

3. using `APCu` for data cache  / via my own shared memory module (shared_mem_lib.php)

4. setup an environment testing structure. The test files are all in `_test/` folder, but are accessed using the controller `"env_test"`. This controller will require
`Basic Authentication` in order to be accessed.

5. Using own `wrapper` functions for mysql/database abtraction (wrapper_model.php). It manages database calls while working with my Shared Memory library.
Example usage in main_model.php

6. The `Shared Memory Library` / Module also has a `pregressive cache` method which will build an array in cache such that it will fetch from the db for all the `keys`
that dont exists in it and add them to cache. Next time, it will fetch from the cache instead. So we pass it a group of `keys` and it identifies what is in cache and what is to bve
fetched from DB.

7. Example 1: `Home Controller`
It pulls CMS data from the database using the `CMS Model` method (which calls db wrapper and prograssive cache method).
