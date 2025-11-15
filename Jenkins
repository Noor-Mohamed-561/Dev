pipeline {
    agent any

    triggers {
        githubPush()     // Trigger from GitHub webhook
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Notify') {
            steps {
                echo "Status initiated"
            }
        }
    }
}
