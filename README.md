#TwitchAutoHost

###About

TwitchAutoHost is a set of PHP scripts to allow people to host their Twitch.tv stream on your channel after providing a password. It was originally designed to allow members of a university gaming society to host their stream on the society Twitch channel, without needing to bother the owner of the channel. It's very lightweight and easy to integrate into an existing website.

###How does it work?

A Twitch.tv user can activate host mode by typing /host <channelname> into their own chat channel. Read more about Host Mode [here](http://blog.twitch.tv/2014/07/share-your-favorite-content-with-host-mode/).

It is also possible to connect to any Twitch chat channel using the IRC protocol, details are [here](http://help.twitch.tv/customer/portal/articles/1302780-twitch-irc). Thus, TwitchAutoHost connects via IRC to your own chat channel, and sends the appropriate command to host the channel given by the user.

###Setup

TwitchAutoHost is very simple to install. An example implementation can be found in 'index.php' in this repository.

The most important part is editing 'config.php' with the correct information for your own Twitch stream, as well as adding a password of your choice to access the hosting. Your OAuth token can be found on the Twitch.tv website, using the link to the IRC information above.

The example input form in 'index.php' is a good guideline as to how to pass the correct values to the scripts.

###Contact

Found this useful? Any suggestions? [Hit me up on twitter](http://www.twitter.com/seanmsaville), I'd love to hear from you.
