for file in ./app/img/thumbnails/*;
do 
    echo $f;
    cwebp -q 50 "$file" -o "${file%.*}.webp"; 
done