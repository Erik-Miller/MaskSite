# masktheme
Theme files for Mothers Against Senseless Killings

## Local Installation

- **Download Local:** We're using [Local by Flywheel](https://local.getflywheel.com/) for our local development environment. If you don't already have it, download Local and install it.
- **Log in to Staging Site:** Visit the staging site at [http://staging.masksite.flywheelsites.com/](http://staging.masksite.flywheelsites.com/) and log in.
- **Create a Duplicator Backup from Staging:** In your staging Wordpress dashboard, go to "Duplicator" in the sidebar, and then click on "Packages". Create a new package with all the defaults, and then download the "archive.zip" file at the end of the process.
- **Install the Duplicator archive in Local:** Open local, then drag the archive.zip that you downloaded in the previous step onto Local. This will import the site and create a new local site for you. Name the site "mask.dev".
- **Install Correct Node Version:** We use [NVM](https://github.com/creationix/nvm) to manage our Node version for this project. Follow the instructions on [their Github](https://github.com/creationix/nvm) to install - make sure you follow the prompt at the end of the installation to export `NVM_DIR`.
- **Re-clone Theme Folder, Clone the Plugins Folder:** I know you already cloned the theme folder, but the duplicator version of the site that we have doesn't have either of the git repos associated with it. CD to your themes directory, delete the mask folder, then run `git clone https://github.com/MASKSITE17/masktheme.git mask` to grab the theme again. After you're done with that, CD back up to `wp-content`, delete the plugins folder, the clone the plugins repo with `git clone https://github.com/MASKSITE17/maskplugins.git plugins`.
- **Set the Node Version:** CD to `wp-content/themes/mask` and run `nvm use` to tell that directory to use the Node version set in `.nvmrc`. If you don't have that version installed, install it with `nvm install [version number]`.
- **Install Node Modules:** Run `npm i` or `yarn` to install necessary Node Modules
- **Run Gulp:** Run `gulp` inside your mask theme directory to compile the styles and start Browsersync. If you decided to name your Local site something other than "mask.dev", you'll need to edit the Browsersync proxy in `Gulpfile.js` in order for Browsersync to function properly.

## Pushing and Pulling from the Staging Server Database

We use [WP Migrate DB Pro](https://deliciousbrains.com/wp-migrate-db-pro/) to sync databases between staging and your local environment, and vice versa. You should not edit anything related to the production database - content edits are made on the staging server by MASK, and will be updated on your local through a WP Migrate DB Pro pull. There is a tool inside Flywheel to migrate staging to prod, and that will handle all DB updates.

**The first thing you do every time you start working on this project is to initiate a staging-to-local database pull!**

- **Pulling the Staging Database to Local:** Navigate to the Migrate DB Pro menu item inside "Tools" in the side nav of the Dashboard. You should see two saved migration profiles there - "Staging to Local", and "Local to Staging". If you don't, you'll need to set up a new profile. Click "Staging to Local", then select "Pull" - after verifying that all the info looks correct, click "Pull & Save". Your database should now be identical to the staging server.

## Working with the Theme Repo

Any SCSS, JavaScript, image files, or font files are sourced from the `src` directory. Any changes to those types of files should be made in the `src` directory - if you change them in `dist`, they'll be overwritten the next time you or someone else runs `gulp`. `Main.scss` is used to import various components and modules, and should not directly contain styles.

If you'd like to, you can use [gitflow](https://github.com/nvie/gitflow) to manage git branching. The general standard for this repo is that most work happens in develop. If you're working on a project that will take a long time to complete, please split the work off to a feature branch (feature/your-feature-name) and keep it up-to-date with develop. Here's a [useful gitflow cheat sheet](https://danielkummer.github.io/git-flow-cheatsheet/) if you are interested in using the tool to manage your branching strategy.

## Pushing to Prod

Production deployments should be handled through Flywheel. Log in to the Flywheel dashboard, click on the masksite project, click staging, and then click "move staging changes" to initiate a deploy. 