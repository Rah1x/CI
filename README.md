# CI-Practive
Code Ignitor 3.x practive

Cloned (and updating `system`) from https://github.com/bcit-ci/CodeIgniter/tree/master

Here is what I have done:

1. Move all but `view` outside the root and set the path in frontController. The view is moved to `publi_html` instead

2. Using `OPCache` for file cache

3. using `APCu` for data cache  / shared memory module (shared_mem_lib.php)

4. setup an env testing structure. The test files are all in `_test/` folder, but are accessed using the controller `"env_test"`. This controller will require
`Basic Authentication` in order to be accessed.

5. Using own wrapper function for mysql/database abtraction (wrapper_model.php). It manages database call while working with my Shared Memory library.
Example usage in main_model.php