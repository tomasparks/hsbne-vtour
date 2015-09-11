find . -name "*.jpeg" -print -exec convert "Spherecam-1669x1669-crop-mask.tif" "{}" "Spherecam-1669x1669-crop-mask.tif" -compose multiply -composite "{}_result.png" \;

find . -name "*.png" -print -exec convert -crop 2592x1944 -trim +repage "{}" -trim +repage "{}_tile_%d.png" \;

find . -name "*.png" -print -exec convert -trim +repage "{}" "{}_trimed.png" \;

