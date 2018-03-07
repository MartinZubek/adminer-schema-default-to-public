# adminer-schema-default-to-public

This is [Adminer](https://www.adminer.org) plugin which alters the PostgreSQL's `search_path` variable so that objects not found in current scheme are also searched for in the `public` scheme.
