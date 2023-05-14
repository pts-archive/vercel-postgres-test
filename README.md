# vercel-postgres-test

This is a test repository created to reproduce the issue described in [vercel/storage#120](https://github.com/vercel/storage/issues/120).

## Steps to reproduce:
1. Clone this repository
2. Setup a new vercel project
3. Add the following to Setting > Environment Variables
  ```txt
  postgres://<user>:<password>@<host>:5432/verceldb?serverVersion=15
  ```
4. Deploy the project.
