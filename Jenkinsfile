pipeline {
    agent any

    stages {
        stage('Checkout Branch') {
            steps {
                script {
                    // Detect the current branch from Jenkins
                    def currentBranch = env.BRANCH_NAME
                    echo "Building branch: ${currentBranch}"

                    // Checkout the branch you want
                    checkout([$class: 'GitSCM',
                        branches: [[name: currentBranch]],
                        userRemoteConfigs: [[url: 'https://github.com/Noor-Mohamed-561/Dev.git']]
                    ])
                }
            }
        }

        stage('Build') {
            steps {
                echo "Running build steps for branch ${env.BRANCH_NAME}"
                // Put your build commands here, e.g.,
                // sh './gradlew build'
            }
        }

        stage('Test') {
            steps {
                echo "Running tests for branch ${env.BRANCH_NAME}"
                // Example test commands
                // sh './gradlew test'
            }
        }
    }

    post {
        always {
            echo "Pipeline finished for ${env.BRANCH_NAME}"
        }
    }
}
