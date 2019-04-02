# Download

## Getting the latest artifact from Gitalb

<https://docs.gitlab.com/ee/user/project/pipelines/job_artifacts.html#downloading-the-latest-artifacts>

To download a single file from the artifacts use the following URL:

https://example.com/<namespace>/<project>/-/jobs/artifacts/<ref>/raw/<path_to_file>?job=<job_name>

To download the file coverage/index.html from the same artifacts use the following URL:

https://gitlab.com/gitlab-org/gitlab-ce/-/jobs/artifacts/master/raw/coverage/index.html?job=coverage



I've tried to create a Grav plugin (`gitlab-get-job-artifact`) to browse the Gitlab API but it was not necessary.

- Grav's GPM is using its own library based on curl to make get requests:

  ```php
  use Grav\Common\GPM\Response;

  $body = Response::get('https://getgrav.org/notifications.json?' . time());
  ```

  It's probably worth to use it, too.

- All calls to the Gitlab API seem to need authentication, even for public information like the list of jobs.
