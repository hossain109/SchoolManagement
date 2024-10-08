pipeline {
    agent any
    environment {
        AWS_REGION = 'eu-west-3'
        ECR_REPO = 'schoolmanagement'
        AWS_ACCOUNT_ID = '992382600267'
        URL_REGISTRY = "${AWS_ACCOUNT_ID}.dkr.ecr.${AWS_REGION}.amazonaws.com"
    }
    
    stages { 
        stage('SCM Checkout') {
            steps {
                git branch: 'main', credentialsId: '992382600267', url: 'https://github.com/hossain109/SchoolManagement.git'
            }
        }
        
        stage('Build and Push Docker Image') {
            steps {
                script {
                        // Login to ECR
                        sh "aws ecr get-login-password --region ${AWS_REGION} | docker login --username AWS --password-stdin ${URL_REGISTRY}"

                        // Build Docker image
                        sh "docker build -t $ECR_REPO ."

                        // Tag Docker image
                        sh "docker tag $ECR_REPO:latest ${URL_REGISTRY}/$ECR_REPO:latest"

                        // Push Docker image to ECR
                        sh "docker push ${URL_REGISTRY}/$ECR_REPO:latest"

                }
            }
        }
    }
}
