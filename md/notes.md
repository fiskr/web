<link href="tools/Markdown/markdown.css" rel="stylesheet"></link>
# Notes


## Debian 8 LXDE Notes 



### Keyboard Shortcuts

2015-09-18

See more info: http://openbox.org/wiki/Help:Bindings#Modifiers

>  You can find the name of any key by using the `xev` command in a terminal, pressing the desired key, and watching the output from `xev` in the terminal. 

Use `openbox --reconfigure` to make your changes present.

#### Screenlock

Added to `~/.config/openbox/lxde-rc.xml`:
``` 
	<!-- 20150918 adding ability to screenlock from keyboard -->
    <keybind key="W-Escape">    
      <action name="Execute">    
        <command>xscreensaver-command -lock</command>    
      </action>    
    </keybind>
```

#### Screenshot

I have a script named `screenshot.sh` that does this:
`scrot -s ~/Pictures/Screenshots/$(date +%Y%m%d_%H-%M-%S).png`
(Essentially it uses scrot to take a screenshot and saves the file under Pictures/Screenshots, with a timestamp in the name.)

I added to `~/.config/openbox/lxde-rc.xml`:

```
  <!-- 20150923 selection-based screenshot keyboard shortcut -->
  <keybind key="W-grave">          
    <action name="Execute">        
      <command>bash /home/serotonin/scripts/screenshot.sh</command>
    </action>
  </keybind>
```

This binds the super key and grave character (\`) to the screenshot function.
(The "super key" is the Windows key on Windows, Command key on Mac, see more [here](https://en.wikipedia.org/wiki/Super_key_%28keyboard_button%29) )


#### Window Tiling Snap (Spectacle-like features)

Added to `~/.config/openbox/lxde-rc.xml`:

```
    <!-- 20150928 Keybindings for window tiling with the keypad -->
    <keybind key="W-f">
      <action name="UnmaximizeFull"/>
      <action name="MoveResizeTo">
        <x>0</x>
        <y>0</y>
        <width>100%</width>
        <height>100%</height>
      </action>
    </keybind>
    <keybind key="W-Left">
      <action name="UnmaximizeFull"/>
      <action name="MoveResizeTo">
        <x>0</x>
        <y>0</y>
        <height>100%</height>
        <width>50%</width>
      </action>
    </keybind>
    <keybind key="W-Right">
      <action name="UnmaximizeFull"/>
      <action name="MoveResizeTo">
        <x>-0</x>
        <y>0</y>
        <height>100%</height>
        <width>50%</width>
      </action>
    </keybind>
    <keybind key="W-Up">
      <action name="UnmaximizeFull"/>
      <action name="MoveResizeTo">
        <x>0</x>
        <y>0</y>
        <width>100%</width>
        <height>50%</height>
      </action>
    </keybind>
    <keybind key="W-Down">
      <action name="UnmaximizeFull"/>
      <action name="MoveResizeTo">
        <x>0</x>
        <y>-0</y>
        <width>100%</width>
        <height>50%</height>
      </action>
    </keybind>
```



#### Autostart Terminal on LXDE startup

Added to `~/.config/lxsession/LXDE/autostart`
```
@lxterminal
```

#### Change Default Editor to VIM (from Nano)

`update-alternatives --config editor`
Then press the number corresponding to the editor you wish to use.

#### Change Wallpaper from Terminal in LXDE

Use feh to change background:
`# apt-get install feh`

Change background with feh:
`feh --bg-scale /path/to/image.png`

