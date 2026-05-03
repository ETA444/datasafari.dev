# DataSafari.dev
[`Landing - https://www.datasafari.dev`](https://www.datasafari.dev)
[`Docs - https://www.datasafari.dev/docs`](https://www.datasafari.dev/docs)

Website source and version control for [DataSafari](https://datasafari.dev) — a Python library that simplifies complex data science workflows into clean, high-level one-liners.

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
├── public_html/        ← live site files (synced from server)
└── scripts/
    └── cpanel-sync.sh  ← cPanel → local sync script
```

## Related
- Docs: [datasafari.dev/docs](https://datasafari.dev/docs)
- PyPI: [pypi.org/project/datasafari](https://pypi.org/project/datasafari)
- GitHub: [github.com/ETA444/datasafari](https://github.com/ETA444/datasafari)
