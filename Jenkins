// Jenkinsfile (Declarative) - simple echo example
pipeline {
  agent any
  stages {
    stage('Info') {
      steps {
        echo "Running branch: ${env.BRANCH_NAME}"
        echo "Hello from QA Pipeline!"
      }
    }
  }
}
