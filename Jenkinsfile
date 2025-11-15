pipeline {
    agent any

    stages {
        stage('Test Build') {
            steps {
                echo "Jenkins Build Triggered Successfully!"
                echo "Branch Name: ${env.BRANCH_NAME}"
                sh 'echo This is a test build'
            }
        }
    }

    post {
        always {
            echo "Build finished"
        }
    }
}
