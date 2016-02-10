var ids = {
  facebookAuth: {
     clientID: process.env.FACEBOOK_CLIENT || '205466769806211',
     clientSecret: process.env.FACEBOOK_SECRET || 'c17218108816d9e2a0fc421c47c110ff',
     callbackURL: process.env.FACEBOOK_CALLBACK || 'http://192.168.0.11:8001/auth/facebook/callback'
  }
};

console.log(ids)
module.exports = ids;
