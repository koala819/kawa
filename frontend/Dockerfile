FROM node:22
WORKDIR /app
COPY package*.json ./
RUN npm install -g pnpm
RUN pnpm install
COPY . .
EXPOSE 3000
ENV NEXT_PRIVATE_DEV_SERVER_BUNDLER=webpack
CMD ["pnpm", "dev"]