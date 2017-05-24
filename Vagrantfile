# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.hostname = "lfilabs"
  config.vm.network :forwarded_port, host: 8080, guest: 80
  config.vm.provision :shell, path: "Vagrant.bootstrap.sh"
end

