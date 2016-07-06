# CI-Practive
Code Ignitor 3.x practive

Cloned (and updating `system`) from https://github.com/bcit-ci/CodeIgniter/tree/master

Here is what I have done:

1. Move all but `view` outside the root and set the path in frontController. The view is moved to `publi_html` instead

2. Using `OPCache` for file cache

3. using `APCu` for database cache

4. setup an env testing structure. The test files are all in `_test/` folder, but are accessed using the controller `"env_test"`. This controller will require
`Basic Authentication` in order to be accessed.