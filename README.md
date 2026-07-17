# GSWA Manager

A custom WordPress plugin developed for the **Gopalganj Social Welfare Association (GSWA)** website.

## Purpose

The GSWA Manager plugin is designed to manage various categories of GSWA members using Custom Post Types (CPT), Advanced Custom Fields (ACF), and WordPress shortcodes.

Current goals include:

* Advisor Management
* Executive Committee Management
* Life Member Management
* General Member Management
* Volunteer Management
* Blood Donor Directory

The plugin is being developed incrementally with versioned releases.



## Features (Current)

* Custom Post Types (CPT)
* Advanced Custom Fields (ACF) integration
* Responsive member display
* WordPress shortcodes
* Custom CSS
* Debug logging helper
* Git version control



## Folder Structure


gswa-manager/
│
├── assets/
│   └── css/
│
├── includes/
│   ├── helpers.php
│   ├── enqueue.php
│   ├── cpt-gswa-advisor.php
│   ├── display-gswa-advisors.php
│   ├── cpt-life-member.php
│   └── display-life-members.php
│
├── README.md
└── gswa-manager.php




## Requirements

* WordPress 6.x or later
* PHP 8.x
* Advanced Custom Fields (ACF)



## Installation

1. Copy the plugin into:


wp-content/plugins/


2. Activate **GSWA Manager** from the WordPress Dashboard.

3. Install and activate **Advanced Custom Fields (ACF)**.

4. Create the required ACF Field Groups.

5. Save **Settings → Permalinks** once to refresh rewrite rules.



## Available Shortcodes

Display Advisors


[gswa_advisors]


Display Life Members


[gswa_life_members]

Display General Members

[gswa_gm_members]


Additional shortcodes will be added in future releases.



## Development

Current development focuses on:

* Custom Post Types
* Display templates
* Responsive layouts
* WordPress coding standards
* Git and GitHub workflow



## Future Roadmap

### Version 1.0

* Advisor Management
* Executive Committee
* Life Members
* General Members
* Volunteer Members
* Responsive frontend
* Basic search

### Version 2.0

* Blood Donor Management
* Advanced filtering
* Member profile pages
* CSV import/export

### Version 3.0

* Member Dashboard
* Role-based access
* SMS notifications
* Email notifications
* Reporting



## Author

Kazi H. Rashid

Senior QA Engineer

Independent Software QA Consultant

Personal website: roceanit.com



## License

This project is currently developed exclusively for the Gopalganj Social Welfare Association (GSWA).
