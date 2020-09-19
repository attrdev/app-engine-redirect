# app-engine-redirect
App Engine script to redirect traffic

## Installation
- Clone repository
- Change values in `env_variables.yaml`
- Change values in `dispatch.yaml`
- Set domain in [App Engine Custom Domains](https://console.cloud.google.com/appengine/settings/domains?project=attrdotdev)
- Make sure your `gcloud init` points to the correct account/project
- Run `./deploy.sh`
