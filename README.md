# DataSafari.dev
Website source and version control for [DataSafari](https://datasafari.dev) — a Python library that simplifies complex data science workflows into clean, high-level one-liners.

**Landing:** [`datasafari.dev`](https://www.datasafari.dev)

**Docs:** [`datasafari.dev/docs`](https://www.datasafari.dev/docs)

## Stack
- HTML / CSS / JS frontend

## Infrastructure
- Hosting: Namecheap Stellar Plus (cPanel)
- CDN & DNS: Cloudflare
- Docs: Sphynx

## Local Sync
Files are pulled from the cPanel server using `scripts/cpanel-sync.sh` and committed manually.

## Structure
```
datasafari.dev/
├── public_html/          ← site source (live)
├── scripts/
│   └── cpanel-sync.sh    ← cPanel sync script
├── seo/                  ← seo-related files (not live)
│   ├── htaccess
│   ├── robots.txt
│   ├── llms.txt
│   ├── meta-tags.html
│   └── schema.json
└── README.md
```

## Related
- Data Safari Library PyPI page: [pypi.org/project/datasafari](https://pypi.org/project/datasafari)
- Data Safari Library Source code: [github.com/ETA444/datasafari](https://github.com/ETA444/datasafari)
