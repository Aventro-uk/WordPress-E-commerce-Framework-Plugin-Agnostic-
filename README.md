# WordPress E‑commerce Framework

A modular, plugin‑agnostic foundation for building custom e‑commerce experiences on WordPress.  
Provides a clean theme, a core functionality plugin, and modern front‑end tooling – all without locking you into a specific e‑commerce plugin.

## Features

- **No hard dependency** – works with WooCommerce, Easy Digital Downloads, or a custom solution.
- **Modular plugin architecture** – each e‑commerce concern (cart, checkout, products, orders) lives in its own class.
- **Abstract hooks** – use `ecom_` prefixed filters/actions to connect your chosen e‑commerce plugin.
- **Responsive theme** – includes a Sass‑powered design system with product cards, buttons, and forms.
- **Build tools** – Webpack + Sass + ES6 ready.
- **Documentation** – guides for setup, integration, and extension.

## Quick Start

1. Clone this repo into your WordPress `wp-content/` folder (or point your web root to the repo root).
2. Run `composer install` in the root and in `wp-content/plugins/ecom-core/`.
3. Run `npm install` and `npm run build` to compile assets.
4. Set up a local WordPress environment (e.g., with Docker – see `examples/docker-compose.yml`).
5. Activate the **Ecom Theme** and **Ecom Core** plugin.
6. Install your preferred e‑commerce plugin (WooCommerce, EDD, etc.).
7. Follow the [Integration Guide](docs/integration-guide.md) to connect the framework modules to your plugin.

## Documentation

- [Setup](docs/setup.md)
- [Integration Guide](docs/integration-guide.md)
- [Modules](docs/modules.md)
- [Hooks & Filters](docs/hooks-filters.md)

## License

MIT
